import { sanityClient } from "../sanity";

const query = `*[_type == "tokensPage"][0] {
  pageTitle,
  tableHead,
  websiteLinkText,
  tokens
}`

export async function getTokensPage() {
  return await sanityClient.fetch(query)
}