import { sanityClient } from "../lib/sanity";

export async function getFeatures() {
    return await sanityClient.fetch(
        `[_type == "feature"] {
      _id,
      title,
      description,
      icon`
    )
}