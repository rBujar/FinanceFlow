import { sanityClient } from "../sanity";

const query = `*[_type == "aboutPage"][0] {
  aboutHero,
  mission,
  timeline,
  team
}`

export async function getAboutPage() {
  return await sanityClient.fetch(query)
}