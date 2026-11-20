import { getContactPage } from '../queries/contactQuery'
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

function displayContact(contact) {
    if (!contact) return

    setText(document.querySelector('.contact__content h1'), contact.heading)

    // The 5 form items, in page order: name, email, company, subject, message
    const formItems = document.querySelectorAll('.contact__item')
    contact.formFields?.forEach((field, i) => {
        const element = formItems[i]
        if (!element) return
        setText(element.querySelector('label'), field.label)
        const input = element.querySelector('input, textarea')
        if (input && field.placeholder) input.placeholder = field.placeholder
    })

    setText(document.querySelector('.contact__form button'), contact.buttonText)

    setText(document.querySelector('.contact__title h2'), contact.infoTitle)
    setText(document.querySelector('.contact__title p'), contact.infoDescription)

    const emails = document.querySelectorAll('.contact__email')
    contact.emails?.forEach((email, i) => {
        const element = emails[i]
        if (!element) return
        setImage(element.querySelector('img'), email.icon)
        setText(element.querySelector('p'), email.text)
    })
}

function displayFaq(faq) {
    if (!faq) return

    setText(document.querySelector('.faq h1'), faq.heading)

    const cards = document.querySelectorAll('.faq__card')
    faq.items?.forEach((item, i) => {
        const card = cards[i]
        if (!card) return
        setText(card.querySelector('.faq__question h4'), item.question)
        setText(card.querySelector('.faq__answer p'), item.answer)
    })
}

async function displayContactPage() {
    const page = await getContactPage()

    if (!page) return

    displayContact(page.contact)
    displayFaq(page.faq)
}

displayContactPage()