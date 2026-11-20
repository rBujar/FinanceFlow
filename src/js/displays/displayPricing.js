import { getPricingPage } from "../queries/pricingQuery";
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

    setText(document.querySelector('.pricing__title h1'), pageTitle.heading)
    setText(document.querySelector('.pricing__title p'), pageTitle.description)
}

function displayTraits(traits) {
    const elements = document.querySelectorAll('.pricing__trait')

    traits?.forEach((trait, i) => {
        const element = elements[i]
        if (!element) return
        setImage(element.querySelector('img'), trait.icon)
        setText(element.querySelector('span'), trait.text)
    })
}

function displayPlans(plans) {
    const container = document.querySelector('.pricing__cards')

    if (!container || !plans?.length) return

    container.innerHTML = plans.map(plan => `
        <div class="pricing__item">
            <div class="pricing__cardTitle">
                <div class="pricing__planType bg-primary-blue max-w-[75px] py-1 px-4 rounded-full flex justify-center items-center">
                    <span class="uppercase text-sm">${plan.planName}</span>
                </div>

                <h2 class="my-5 text-[28px]/[36px] xl:[42px]/[55px]">
                    ${plan.currencySymbol} ${plan.price} ${plan.currency}
                </h2>

                <p class="text-base lg:text-lg">${plan.description}</p>
            </div>

            <div class="pricing__featureList">
                <h5 class="text-lg text-bold uppercase mb-4">${plan.featuresTitle}</h5>

                <ul class="pricing__features pl-5 [&>li]:list-disc [&>li]:marker:text-primary-blue [&>li]:mb-4 [&>li:last-child]:mb-0">
                    ${plan.features.map(feature => `
                        <li class="pricing__list text-lg">${feature}</li>
                    `).join('')}
                </ul>
            </div>

            <button class="blue-btn" data-link="${plan.buttonLink}">
                <span class="text-caps">${plan.buttonText}</span>
            </button>
        </div>
    `).join('')

    container.querySelectorAll('.blue-btn').forEach(button => {
        button.addEventListener('click', () => {
            window.location.href = button.dataset.link
        })
    })
}

async function displayPricing() {
    const page = await getPricingPage()

    if (!page) return

    displayTitle(page.pageTitle)
    displayTraits(page.traits)
    displayPlans(page.plans)
}

displayPricing()