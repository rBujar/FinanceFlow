import { sanityClient } from "../sanity";

const query = `*[_type == "homepage"][0] {
  hero,
  build,
  rewards,
  explore,
  reviews,
  articles,
  app
}`

export async function getHomepage() {
  return await sanityClient.fetch(query)
}