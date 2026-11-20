import { sanityClient } from "../sanity";

const query = `*[_type == "blogPostPage"][0] {
  blogPost,
  post
}`

export async function getBlogPostPage() {
  return await sanityClient.fetch(query)
}