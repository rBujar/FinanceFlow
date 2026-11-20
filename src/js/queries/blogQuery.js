import { sanityClient } from "../sanity";

const query = `*[_type == "blogPage"][0] {
  blog,
  post
}`

export async function getBlogPage() {
  return await sanityClient.fetch(query)
}