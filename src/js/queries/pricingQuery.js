import { sanityClient } from "../sanity";

const query = `*[_type == "pricingPage"][0] {
  pageTitle,
  traits,
  plans
}`

export async function getPricingPage() {
  return await sanityClient.fetch(query)
}