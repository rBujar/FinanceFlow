import {defineField, defineType} from 'sanity'

export const homepageSchema = defineType({
  name: 'homepage',
  title: 'Homepage',
  type: 'document',
  groups: [
    {name: 'hero', title: 'Hero'},
    {name: 'build', title: 'Build'},
    {name: 'rewards', title: 'Rewards'},
    {name: 'explore', title: 'Explore'},
    {name: 'reviews', title: 'Reviews'},
    {name: 'articles', title: 'Articles'},
    {name: 'app', title: 'App'},
  ],
  fields: [
    // ---------- HERO ----------
    defineField({
      name: 'hero',
      title: 'Hero',
      type: 'object',
      group: 'hero',
      fields: [
        defineField({
          name: 'heading',
          title: 'Heading',
          type: 'string',
          validation: (Rule) => Rule.required(),
        }),
        defineField({
          name: 'description',
          title: 'Description',
          type: 'text',
          rows: 3,
        }),
        defineField({
          name: 'primaryButtonText',
          title: 'Primary Button Text',
          type: 'string',
          initialValue: 'download app',
        }),
        defineField({
          name: 'primaryButtonLink',
          title: 'Primary Button Link',
          type: 'string',
          initialValue: '#',
        }),
        defineField({
          name: 'secondaryButtonText',
          title: 'Secondary Button Text',
          type: 'string',
          initialValue: 'view pricing',
        }),
        defineField({
          name: 'secondaryButtonLink',
          title: 'Secondary Button Link',
          type: 'string',
          initialValue: './pricing.php',
        }),
        defineField({
          name: 'heroImage',
          title: 'Hero Image',
          type: 'image',
          options: {hotspot: true},
          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
        }),
        defineField({
          name: 'featuredLabel',
          title: 'Featured On Label',
          type: 'string',
        }),
        defineField({
          name: 'companyLogos',
          title: 'Company Logos',
          type: 'array',
          of: [
            {
              type: 'image',
              fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
            },
          ],
        }),
      ],
    }),

    // ---------- BUILD ----------
    defineField({
      name: 'build',
      title: 'Build',
      type: 'object',
      group: 'build',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'smallCards',
          title: 'Small Cards (first two = left column, last two = right column)',
          type: 'array',
          validation: (Rule) => Rule.length(4),
          of: [
            {
              type: 'object',
              fields: [
                defineField({
                  name: 'icon',
                  title: 'Icon',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
              ],
              preview: {select: {title: 'title', media: 'icon'}},
            },
          ],
        }),
        defineField({
          name: 'bigCard',
          title: 'Big Card (center)',
          type: 'object',
          fields: [
            defineField({name: 'title', title: 'Title', type: 'string'}),
            defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
            defineField({
              name: 'image',
              title: 'Image',
              type: 'image',
              fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
            }),
          ],
        }),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
      ],
    }),

    // ---------- REWARDS ----------
    defineField({
      name: 'rewards',
      title: 'Rewards',
      type: 'object',
      group: 'rewards',
      fields: [
        defineField({
          name: 'cards',
          title: 'Cards (first = image on the left, second = image on the right)',
          type: 'array',
          validation: (Rule) => Rule.length(2),
          of: [
            {
              type: 'object',
              fields: [
                defineField({
                  name: 'image',
                  title: 'Image',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
                defineField({
                  name: 'features',
                  title: 'Features',
                  type: 'array',
                  validation: (Rule) => Rule.length(3),
                  of: [
                    {
                      type: 'object',
                      fields: [
                        defineField({
                          name: 'icon',
                          title: 'Icon',
                          type: 'image',
                          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                        }),
                        defineField({name: 'text', title: 'Text', type: 'string'}),
                      ],
                      preview: {select: {title: 'text', media: 'icon'}},
                    },
                  ],
                }),
              ],
              preview: {select: {title: 'title', media: 'image'}},
            },
          ],
        }),
      ],
    }),

    // ---------- EXPLORE ----------
    defineField({
      name: 'explore',
      title: 'Explore',
      type: 'object',
      group: 'explore',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
        defineField({
          name: 'image',
          title: 'Image',
          type: 'image',
          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
        }),
      ],
    }),

    // ---------- REVIEWS ----------
    defineField({
      name: 'reviews',
      title: 'Reviews',
      type: 'object',
      group: 'reviews',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
        defineField({
          name: 'items',
          title: 'User Reviews',
          type: 'array',
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'quote', title: 'Quote', type: 'text', rows: 4}),
                defineField({
                  name: 'userImage',
                  title: 'User Image',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'userName', title: 'User Name', type: 'string'}),
                defineField({name: 'userRole', title: 'Role, Company', type: 'string'}),
              ],
              preview: {select: {title: 'userName', subtitle: 'userRole', media: 'userImage'}},
            },
          ],
        }),
        defineField({name: 'startTitle', title: 'Get Started Title', type: 'string'}),
        defineField({
          name: 'startDescription',
          title: 'Get Started Description',
          type: 'text',
          rows: 3,
        }),
        defineField({
          name: 'steps',
          title: 'Get Started Steps',
          type: 'array',
          validation: (Rule) => Rule.length(3),
          of: [
            {
              type: 'object',
              fields: [
                defineField({
                  name: 'icon',
                  title: 'Icon',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'text', title: 'Text', type: 'string'}),
              ],
              preview: {select: {title: 'text', media: 'icon'}},
            },
          ],
        }),
      ],
    }),

    // ---------- ARTICLES ----------
    defineField({
      name: 'articles',
      title: 'Articles',
      type: 'object',
      group: 'articles',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'items',
          title: 'Article Cards',
          type: 'array',
          validation: (Rule) => Rule.length(3),
          of: [
            {
              type: 'object',
              fields: [
                defineField({
                  name: 'image',
                  title: 'Image',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'category', title: 'Category Button Text', type: 'string'}),
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
                defineField({
                  name: 'authorImage',
                  title: 'Author Image',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'authorName', title: 'Author Name', type: 'string'}),
                defineField({name: 'date', title: 'Date (e.g. August 2, 2021)', type: 'string'}),
              ],
              preview: {select: {title: 'title', subtitle: 'authorName', media: 'image'}},
            },
          ],
        }),
        defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
      ],
    }),

    // ---------- APP ----------
    defineField({
      name: 'app',
      title: 'App',
      type: 'object',
      group: 'app',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'cards',
          title: 'Download Cards (first = iOS, second = Android)',
          type: 'array',
          validation: (Rule) => Rule.length(2),
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
                defineField({name: 'buttonText', title: 'Button Text', type: 'string'}),
                defineField({
                  name: 'image',
                  title: 'Image',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
              ],
              preview: {select: {title: 'title', media: 'image'}},
            },
          ],
        }),
      ],
    }),
  ],
  preview: {
    prepare() {
      return {title: 'Homepage'}
    }
  }
})