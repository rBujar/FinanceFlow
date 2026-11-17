import { createClient } from "@sanity/client";

export const sanityClient = createClient ({
    projectId: 'psib4jkw',
    dataset: 'production',
    useCdn: true,
    apiVersion: '2026-11-16'
})
