import { getTokensPage } from '../queries/tokensQuery'
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

function displayTitle(pageTitle) {
    if (!pageTitle) return

    setText(document.querySelector('.token__title h1'), pageTitle.heading)
    setText(document.querySelector('.token__title p'), pageTitle.description)
}

function displayTableHead(tableHead) {
    if (!tableHead) return

    const headings = document.querySelectorAll('.token__tableHead th')

    setText(headings[0], tableHead.name)
    setText(headings[1], tableHead.description)
    setText(headings[2], tableHead.marketCap)
    setText(headings[3], tableHead.volume)
    setText(headings[4], tableHead.website)
}

function displayTokens(tokens, linkText) {
    const body = document.querySelector('.token__tableBody')
    const template = body?.querySelector('.table__row')

    if (!body || !template || !tokens?.length) return

    tokens.forEach(token => {
        const row = template.cloneNode(true)

        setImage(row.querySelector('.token__coin img'), token.icon)
        setText(row.querySelector('.token__coin h5'), token.name)
        setText(row.querySelector('.token__coin span'), token.symbol)
        setText(row.querySelector('.token__desc p'), token.description)
        setText(row.querySelector('.token__cap p'), token.marketCap)
        setText(row.querySelector('.token__volume p'), token.volume)

        const link = row.querySelector('.token__website a')
        setText(link, linkText)
        if (link && token.websiteLink) link.href = token.websiteLink

        body.appendChild(row)
    })

    template.remove()
}

async function displayTokensPage() {
    const page = await getTokensPage()

    if (!page) return

    displayTitle(page.pageTitle)
    displayTableHead(page.tableHead)
    displayTokens(page.tokens, page.websiteLinkText)
}

displayTokensPage()