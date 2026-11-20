import { getBlogPage } from '../queries/blogQuery'
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

// The tag text (e.g. PRODUCTS) comes from the matching filter button (e.g. "Products")
function categoryTag(category) {
    const filterButton = document.querySelector(`.post__postType[data-filter="${category}"]`)
    return filterButton?.textContent.trim().toUpperCase()
}

function displayBlog(blog) {
    if (!blog) return

    setText(document.querySelector('.blog__title h2'), blog.heading)
    setText(document.querySelector('.blog__title p'), blog.description)

    const featured = blog.featured
    const element = document.querySelector('.blog__item')
    if (!featured || !element) return

    setImage(element.querySelector('.blog__image img'), featured.image)
    setText(element.querySelector('.blog__info button'), categoryTag(featured.category))
    setText(element.querySelector('.blog__infoTitle h4'), featured.title)
    setText(element.querySelector('.blog__infoTitle p'), featured.description)
    setImage(element.querySelector('.blog__author img'), featured.authorImage)
    setText(element.querySelector('.blog__authorInfo h5'), featured.authorName)
    setText(element.querySelector('.blog__authorInfo span'), featured.date)
}

function displayPost(post) {
    if (!post) return

    setText(document.querySelector('.post__title h2'), post.title)

    const filterButtons = document.querySelectorAll('.post__postType')
    post.filterButtons?.forEach((label, i) => {
        setText(filterButtons[i], label)
    })

    const container = document.querySelector('.post__content')
    const template = container?.querySelector('.post__item')

    if (!container || !template || !post.items?.length) return

    post.items.forEach(item => {
        const element = template.cloneNode(true)

        if (item.category) element.dataset.category = item.category

        setImage(element.querySelector('.post__image img'), item.image)
        setText(element.querySelector('.post__image button'), categoryTag(item.category))
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

async function displayBlogPage() {
    const page = await getBlogPage()

    if (!page) return

    // Posts first: the filter button labels must be set before the tags are built
    displayPost(page.post)
    displayBlog(page.blog)
}

displayBlogPage()