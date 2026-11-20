import {defineField, defineType} from 'sanity'

export const tokenSchema = defineType({
  name: 'tokensPage',
  title: 'Tokens Page',
  type: 'document',
  groups: [
    {name: 'title', title: 'Title'},
    {name: 'content', title: 'Content'},
  ],
  fields: [
    // ---------- TITLE ----------
    defineField({
      name: 'pageTitle',
      title: 'Page Title',
      type: 'object',
      group: 'title',
      fields: [
        defineField({
          name: 'heading',
          title: 'Heading',
          type: 'string',
          validation: (Rule) => Rule.required(),
        }),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
      ],
    }),

    // ---------- CONTENT: TABLE HEAD ----------
    defineField({
      name: 'tableHead',
      title: 'Table Headings',
      type: 'object',
      group: 'content',
      fields: [
        defineField({name: 'name', title: 'Name Column', type: 'string', initialValue: 'name'}),
        defineField({
          name: 'description',
          title: 'Description Column',
          type: 'string',
          initialValue: 'description',
        }),
        defineField({
          name: 'marketCap',
          title: 'Market Cap Column',
          type: 'string',
          initialValue: 'market cap',
        }),
        defineField({
          name: 'volume',
          title: 'Volume Column',
          type: 'string',
          initialValue: 'volume',
        }),
        defineField({
          name: 'website',
          title: 'Website Column',
          type: 'string',
          initialValue: 'website',
        }),
      ],
    }),

    // ---------- CONTENT: LINK TEXT ----------
    defineField({
      name: 'websiteLinkText',
      title: 'Website Link Text (same for every row)',
      type: 'string',
      group: 'content',
      initialValue: 'Visit Website',
    }),

    // ---------- CONTENT: TABLE ROWS ----------
    defineField({
      name: 'tokens',
      title: 'Tokens (table rows, drag to reorder)',
      type: 'array',
      group: 'content',
      of: [
        {
          type: 'object',
          fields: [
            defineField({
              name: 'icon',
              title: 'Coin Icon',
              type: 'image',
              fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
            }),
            defineField({
              name: 'name',
              title: 'Name',
              type: 'string',
              validation: (Rule) => Rule.required(),
            }),
            defineField({name: 'symbol', title: 'Symbol (e.g. BTC)', type: 'string'}),
            defineField({name: 'description', title: 'Description', type: 'text', rows: 2}),
            defineField({
              name: 'marketCap',
              title: 'Market Cap (e.g. $252,844,036,453 USD)',
              type: 'string',
            }),
            defineField({
              name: 'volume',
              title: 'Volume (e.g. $30,504,879,301 USD)',
              type: 'string',
            }),
            defineField({name: 'websiteLink', title: 'Website Link', type: 'string', initialValue: '#'}),
          ],
          preview: {select: {title: 'name', subtitle: 'symbol', media: 'icon'}},
        },
      ],
    }),
  ],

  preview: {
    prepare() {
      return {title: 'Tokens Page'}
    },
  },
})