import {defineField, defineType} from 'sanity'

export const aboutUsSchema = defineType({
  name: 'aboutPage',
  title: 'About Page',
  type: 'document',
  groups: [
    {name: 'aboutHero', title: 'About Hero'},
    {name: 'mission', title: 'Mission'},
    {name: 'timeline', title: 'Timeline'},
    {name: 'team', title: 'Team'},
  ],
  fields: [
   
    defineField({
      name: 'aboutHero',
      title: 'About Hero',
      type: 'object',
      group: 'aboutHero',
      fields: [
        defineField({
          name: 'heading',
          title: 'Heading',
          type: 'string',
          validation: (Rule) => Rule.required(),
        }),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({name: 'infoTitle', title: 'Info Title', type: 'string'}),
        defineField({name: 'infoDescription', title: 'Info Description', type: 'text', rows: 3}),
        defineField({
          name: 'cards',
          title: 'Cards',
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
      ],
    }),

    defineField({
      name: 'mission',
      title: 'Mission',
      type: 'object',
      group: 'mission',
      fields: [
        defineField({
          name: 'items',
          title: 'Items (first = Our mission, second = Our story)',
          type: 'array',
          validation: (Rule) => Rule.length(2),
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({name: 'firstParagraph', title: 'First Paragraph', type: 'text', rows: 5}),
                defineField({name: 'secondParagraph', title: 'Second Paragraph', type: 'text', rows: 5}),
              ],
              preview: {select: {title: 'title'}},
            },
          ],
        }),
        defineField({
          name: 'image',
          title: 'Image',
          type: 'image',
          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
        }),
      ],
    }),

    defineField({
      name: 'timeline',
      title: 'Timeline',
      type: 'object',
      group: 'timeline',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'items',
          title: 'Timeline Items',
          type: 'array',
          validation: (Rule) => Rule.length(4),
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'year', title: 'Year', type: 'string'}),
                defineField({name: 'title', title: 'Title', type: 'string'}),
                defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
              ],
              preview: {select: {title: 'year', subtitle: 'title'}},
            },
          ],
        }),
      ],
    }),

    defineField({
      name: 'team',
      title: 'Team',
      type: 'object',
      group: 'team',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'members',
          title: 'Team Members',
          type: 'array',
          validation: (Rule) => Rule.length(3),
          of: [
            {
              type: 'object',
              fields: [
                defineField({
                  name: 'image',
                  title: 'Photo',
                  type: 'image',
                  fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
                }),
                defineField({name: 'name', title: 'Name', type: 'string'}),
                defineField({name: 'role', title: 'Role', type: 'string'}),
              ],
              preview: {select: {title: 'name', subtitle: 'role', media: 'image'}},
            },
          ],
        }),
        defineField({name: 'investorsTitle', title: 'Investors Title', type: 'string'}),
        defineField({
          name: 'investorsDescription',
          title: 'Investors Description',
          type: 'text',
          rows: 3,
        }),
        defineField({
          name: 'investorLogos',
          title: 'Investor Logos',
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
  ],

  preview: {
    prepare() {
      return {title: 'About Page'}
    },
  },
})