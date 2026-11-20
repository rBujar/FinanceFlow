import { getAboutPage } from '../queries/aboutPageQuery'
import { createImageUrlBuilder } from '@sanity/image-url'
import { sanityClient } from '../sanity'

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

function displayAboutHero(aboutHero) {
    if (!aboutHero) return

    setText(document.querySelector('.aboutHero__title h1'), aboutHero.heading)
    setText(document.querySelector('.aboutHero__title p'), aboutHero.description)
    setText(document.querySelector('.aboutHero__info h2'), aboutHero.infoTitle)
    setText(document.querySelector('.aboutHero__info p'), aboutHero.infoDescription)

    const cards = document.querySelectorAll('.aboutHero__item')
    aboutHero.cards?.forEach((card, i) => {
        const element = cards[i]
        if (!element) return
        setImage(element.querySelector('img'), card.icon)
        setText(element.querySelector('.aboutHero__cardDetails h5'), card.title)
        setText(element.querySelector('.aboutHero__cardDetails p'), card.description)
    })
}

function displayMission(mission) {
    if (!mission) return

    const items = document.querySelectorAll('.mission__item')
    mission.items?.forEach((item, i) => {
        const element = items[i]
        if (!element) return
        const paragraphs = element.querySelectorAll('p')
        setText(element.querySelector('h2'), item.title)
        setText(paragraphs[0], item.firstParagraph)
        setText(paragraphs[1], item.secondParagraph)
    })

    setImage(document.querySelector('.mission__image img'), mission.image)
}

function displayTimeline(timeline) {
    if (!timeline) return

    setText(document.querySelector('.timeline__title h2'), timeline.title)
    setText(document.querySelector('.timeline__title p'), timeline.description)

    const items = document.querySelectorAll('.timeline__item')
    timeline.items?.forEach((item, i) => {
        const element = items[i]
        if (!element) return
        setText(element.querySelector('.timeline__info h2'), item.year)
        setText(element.querySelector('.timeline__info h4'), item.title)
        setText(element.querySelector('.timeline__info p'), item.description)
    })
}

function displayTeam(team) {
    if (!team) return

    setText(document.querySelector('.team__title h2'), team.title)
    setText(document.querySelector('.team__title p'), team.description)

    const members = document.querySelectorAll('.team__item')
    team.members?.forEach((member, i) => {
        const element = members[i]
        if (!element) return
        setImage(element.querySelector('img'), member.image)
        setText(element.querySelector('.team__info h4'), member.name)
        setText(element.querySelector('.team__info p'), member.role)
    })

    setText(document.querySelector('.team__investorsTitle h2'), team.investorsTitle)
    setText(document.querySelector('.team__investorsTitle p'), team.investorsDescription)

    const companies = document.querySelector('.team__companies')
    if (companies && team.investorLogos?.length) {
        companies.innerHTML = team.investorLogos.map(logo => `
            <img src="${urlFor(logo)}" alt="${logo.alt || ''}">
        `).join('')
    }
}

async function displayAbout() {
    const page = await getAboutPage()

    if (!page) return

    displayAboutHero(page.aboutHero)
    displayMission(page.mission)
    displayTimeline(page.timeline)
    displayTeam(page.team)
}

displayAbout()