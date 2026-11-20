import { getBlogPostPage } from '../queries/blogPostQuery'
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

// Text shown on the tag of each post card, by category value
const categoryTags = {
    apps: 'APPS',
    products: 'PRODUCTS',
    tutorials: 'TUTORIAL',
}

function displayArticle(article) {
    if (!article) return

    setImage(document.querySelector('.blogPost__author img'), article.authorImage)
    setText(document.querySelector('.blogPost__authorInfo h5'), article.authorName)
    setText(document.querySelector('.blogPost__authorInfo p'), article.date)

    setText(document.querySelector('.blogPost__title h1'), article.heading)
    setText(document.querySelector('.blogPost__title p'), article.description)
    setImage(document.querySelector('.blogPost__info > img'), article.mainImage)

    const blocks = document.querySelectorAll('.blogPost__item')
    article.items?.forEach((item, i) => {
        const element = blocks[i]
        if (!element) return
        const paragraphs = element.querySelectorAll('p')
        setText(element.querySelector('h2'), item.heading)
        setText(paragraphs[0], item.firstParagraph)
        setText(paragraphs[1], item.secondParagraph)
    })

        if (article.items?.length) {
        blocks.forEach((element, i) => {
            if (i >= article.items.length) element.remove()
        })
    }

    setImage(document.querySelector('.blogPost__content img'), article.bodyImage)
    setText(document.querySelector('.blogPost__card p'), article.quote)
}

function displayPost(post) {
    if (!post) return

    setText(document.querySelector('.post__title h2'), post.title)
    setText(document.querySelector('.post__postType'), post.filterButtonText)

    const container = document.querySelector('.post__content')
    const template = container?.querySelector('.post__item')

    if (!container || !template || !post.items?.length) return

    post.items.forEach(item => {
        const element = template.cloneNode(true)

        if (item.category) element.dataset.category = item.category

        setImage(element.querySelector('.post__image img'), item.image)
        setText(element.querySelector('.post__image button'), categoryTags[item.category])
        setText(element.querySelector('.post__infoTitle h4'), item.title)
        setText(element.querySelector('.post__infoTitle p'), item.description)
        setImage(element.querySelector('.post__author img'), item.authorImage)
        setText(element.querySelector('.post__authorInfo h5'), item.authorName)
        setText(element.querySelector('.post__authorInfo span'), item.date)

        const link = element.querySelector('a')
        if (link && item.link) link.href = item.link

        container.appendChild(element)
    })

    template.remove()
}

async function displayBlogPostPage() {
    const page = await getBlogPostPage()

    if (!page) return

    displayArticle(page.blogPost)
    displayPost(page.post)
}

displayBlogPostPage()