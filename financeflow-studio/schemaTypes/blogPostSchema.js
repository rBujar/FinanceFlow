import {defineField, defineType} from 'sanity'

export const blogPostSchema = defineType({
  name: 'blogPostPage',
  title: 'Blog Post Page',
  type: 'document',
  groups: [
    {name: 'blogPost', title: 'Article'},
    {name: 'post', title: 'Latest Posts'},
  ],
  fields: [
    // ---------- ARTICLE ----------
    defineField({
      name: 'blogPost',
      title: 'Article',
      type: 'object',
      group: 'blogPost',
      fields: [
        defineField({
          name: 'authorImage',
          title: 'Author Image',
          type: 'image',
          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
        }),
        defineField({name: 'authorName', title: 'Author Name', type: 'string'}),
        defineField({name: 'date', title: 'Date (e.g. August 2, 2021)', type: 'string'}),
        defineField({
          name: 'heading',
          title: 'Heading',
          type: 'string',
          validation: (Rule) => Rule.required(),
        }),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'mainImage',
          title: 'Main Image',
          type: 'image',
          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
        }),
        defineField({
          name: 'items',
          title: 'Text Blocks (page order: 1 and 2 above the image, 3 below it, 4 after the quote card)',
          type: 'array',
          validation: (Rule) => Rule.max(4),
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'heading', title: 'Heading', type: 'string'}),
                defineField({
                  name: 'firstParagraph',
                  title: 'First Paragraph',
                  type: 'text',
                  rows: 4,
                }),
                defineField({
                  name: 'secondParagraph',
                  title: 'Second Paragraph',
                  type: 'text',
                  rows: 4,
                }),
              ],
              preview: {select: {title: 'heading'}},
            },
          ],
        }),
        defineField({
          name: 'bodyImage',
          title: 'Image Between the Text (after block 2)',
          type: 'image',
          fields: [defineField({name: 'alt', title: 'Alt text', type: 'string'})],
        }),
        defineField({
          name: 'quote',
          title: 'Quote Card Text (between block 3 and 4)',
          type: 'text',
          rows: 3,
        }),
      ],
    }),

    // ---------- LATEST POSTS ----------
    defineField({
      name: 'post',
      title: 'Latest Posts',
      type: 'object',
      group: 'post',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({name: 'filterButtonText', title: 'Filter Button Text', type: 'string'}),
        defineField({
          name: 'items',
          title: 'Posts',
          type: 'array',
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
                defineField({
                  name: 'category',
                  title: 'Category',
                  type: 'string',
                  options: {
                    list: [
                      {title: 'Apps', value: 'apps'},
                      {title: 'Products', value: 'products'},
                      {title: 'Tutorial', value: 'tutorials'},
                    ],
                  },
                  validation: (Rule) => Rule.required(),
                }),
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
                defineField({
                  name: 'link',
                  title: 'Post Link',
                  type: 'string',
                  initialValue: './blogPost',
                }),
              ],
              preview: {select: {title: 'title', subtitle: 'authorName', media: 'image'}},
            },
          ],
        }),
      ],
    }),
  ],

  preview: {
    prepare() {
      return {title: 'Blog Post Page'}
    },
  },
})