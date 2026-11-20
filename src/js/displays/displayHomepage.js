import { getHomepage } from '../queries/homepageQuery'
import { createImageUrlBuilder } from '@sanity/image-url'
import { sanityClient } from '../sanity'
import { initReviewsSwiper } from '../review'

const builder = createImageUrlBuilder(sanityClient)

function urlFor(source) {
    return builder.image(source).auto('format').url()
}

// Only changes the text if the element exists AND Sanity has a value
function setText(element, value) {
    if (element && value) element.textContent = value
}

// Only changes the image if the element exists AND Sanity has an image
function setImage(element, image) {
    if (element && image?.asset) {
        element.src = urlFor(image)
        if (image.alt) element.alt = image.alt
    }
}

function displayHero(hero) {
    if (!hero) return

    setText(document.querySelector('.hero__title h1'), hero.heading)
    setText(document.querySelector('.hero__title p'), hero.description)

    const primaryButton = document.querySelector('.hero__buttons > button')
    setText(primaryButton, hero.primaryButtonText)
    if (primaryButton && hero.primaryButtonLink) {
        primaryButton.addEventListener('click', () => {
            window.location.href = hero.primaryButtonLink
        })
    }

    setText(document.querySelector('.hero__buttons a button'), hero.secondaryButtonText)
    const secondaryLink = document.querySelector('.hero__buttons a')
    if (secondaryLink && hero.secondaryButtonLink) {
        secondaryLink.href = hero.secondaryButtonLink
    }

    setImage(document.querySelector('.hero__image img'), hero.heroImage)
    setText(document.querySelector('.hero__features > p'), hero.featuredLabel)

    const companies = document.querySelector('.hero__companies')
    if (companies && hero.companyLogos?.length) {
        companies.innerHTML = hero.companyLogos.map(logo => `
            <img src="${urlFor(logo)}" alt="${logo.alt || ''}" class="w-[134px] sm:w-[170px]">
        `).join('')
    }
}

function displayBuild(build) {
    if (!build) return

    setText(document.querySelector('.build__title h2'), build.title)
    setText(document.querySelector('.build__title p'), build.description)

    const smallCards = document.querySelectorAll('.build__smallCard')
    build.smallCards?.forEach((card, i) => {
        const element = smallCards[i]
        if (!element) return
        setImage(element.querySelector('img'), card.icon)
        setText(element.querySelector('h4'), card.title)
        setText(element.querySelector('p'), card.description)
    })

    const bigCard = document.querySelector('.build__bigCard')
    if (bigCard && build.bigCard) {
        setText(bigCard.querySelector('h4'), build.bigCard.title)
        setText(bigCard.querySelector('p'), build.bigCard.description)
        setImage(bigCard.querySelector('img'), build.bigCard.image)
    }

    setText(document.querySelector('.build__button'), build.buttonText)
}

function displayRewards(rewards) {
    if (!rewards) return

    const cards = document.querySelectorAll('.rewards__card')
    rewards.cards?.forEach((card, i) => {
        const element = cards[i]
        if (!element) return

        setImage(element.querySelector('.rewards__image img'), card.image)
        setText(element.querySelector('.rewards__content h2'), card.title)
        setText(element.querySelector('.rewards__content > p'), card.description)

        const items = element.querySelectorAll('.rewards__item')
        card.features?.forEach((feature, j) => {
            const item = items[j]
            if (!item) return
            setImage(item.querySelector('img'), feature.icon)
            setText(item.querySelector('p'), feature.text)
        })
    })
}

function displayExplore(explore) {
    if (!explore) return

    setText(document.querySelector('.explore__title h2'), explore.title)
    setText(document.querySelector('.explore__title p'), explore.description)
    setText(document.querySelector('.explore__content button'), explore.buttonText)
    setImage(document.querySelector('.explore__phone img'), explore.image)
}

function displayReviewSlides(items) {

    const wrapper = document.querySelector('.review__userReviews .swiper-wrapper')
    const template = wrapper?.querySelector('.swiper-slide')

    if (!wrapper || !template || !items?.length) return

    items.forEach(review => {
        const slide = template.cloneNode(true)

        setText(slide.querySelector('.review__item > p'), review.quote)
        setImage(slide.querySelector('.review__user img'), review.userImage)
        setText(slide.querySelector('.review__userInfo h5'), review.userName)
        setText(slide.querySelector('.review__userInfo p'), review.userRole)

        wrapper.appendChild(slide)
    })

    template.remove()
}

function displayReviews(reviews) {
    if (!reviews) return

    setText(document.querySelector('.review__header h2'), reviews.title)
    setText(document.querySelector('.review__header button'), reviews.buttonText)
    setText(document.querySelector('.review__infoTitle h2'), reviews.startTitle)
    setText(document.querySelector('.review__infoTitle p'), reviews.startDescription)

    const steps = document.querySelectorAll('.review__step')
    reviews.steps?.forEach((step, i) => {
        const element = steps[i]
        if (!element) return
        setImage(element.querySelector('img'), step.icon)
        setText(element.querySelector('p'), step.text)
    })

    displayReviewSlides(reviews.items)
}

function displayArticles(articles) {
    if (!articles) return

    setText(document.querySelector('.article__title h2'), articles.title)
    setText(document.querySelector('.article__title p'), articles.description)

    const items = document.querySelectorAll('.article__item')
    articles.items?.forEach((article, i) => {
        const element = items[i]
        if (!element) return

        setImage(element.querySelector('.article__image img'), article.image)
        setText(element.querySelector('.article__image button'), article.category)
        setText(element.querySelector('.article__infoTitle h4'), article.title)
        setText(element.querySelector('.article__infoTitle p'), article.description)
        setImage(element.querySelector('.article__author img'), article.authorImage)
        setText(element.querySelector('.article__authorInfo h5'), article.authorName)
        setText(element.querySelector('.article__authorInfo span'), article.date)
    })

    setText(document.querySelector('.article__viewBtn'), articles.buttonText)
}

function displayApp(app) {
    if (!app) return

    setText(document.querySelector('.app__title h2'), app.title)
    setText(document.querySelector('.app__title p'), app.description)

    const items = document.querySelectorAll('.app__item')
    app.cards?.forEach((card, i) => {
        const element = items[i]
        if (!element) return

        setText(element.querySelector('.app__info h2'), card.title)
        setText(element.querySelector('.app__info p'), card.description)
        setText(element.querySelector('button p'), card.buttonText)
        setImage(element.querySelector('.app__image img'), card.image)
    })
}

async function displayHomepage() {
    const page = await getHomepage()

    displayHero(page.hero)
    displayBuild(page.build)
    displayRewards(page.rewards)
    displayExplore(page.explore)
    displayReviews(page.reviews)
    displayArticles(page.articles)
    displayApp(page.app)

     initReviewsSwiper()
}

displayHomepage()