import { sanityClient } from "../sanity";

const query = `*[_type == "contactPage"][0] {
  contact,
  faq
}`

export async function getContactPage() {
  return await sanityClient.fetch(query)
}