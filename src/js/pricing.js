
import { sanityClient } from './sanity'

const query = `*[_type == "pricingPlan"] | order(order asc) {
  _id,
  planName,
  price,
  currency,
  currencySymbol,
  description,
  featuresTitle,
  features,
  buttonText,
  buttonLink
}`

export async function getPricingPlans() {
  return await sanityClient.fetch(query)
}
