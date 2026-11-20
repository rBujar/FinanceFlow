import {defineField, defineType} from 'sanity'

export const blogSchema = defineType({
  name: 'blogPage',
  title: 'Blog Page',
  type: 'document',
  groups: [
    {name: 'blog', title: 'Blog'},
    {name: 'post', title: 'Latest Posts'},
  ],
  fields: [
    // ---------- BLOG (title + featured post) ----------
    defineField({
      name: 'blog',
      title: 'Blog',
      type: 'object',
      group: 'blog',
      fields: [
        defineField({
          name: 'heading',
          title: 'Heading',
          type: 'string',
          validation: (Rule) => Rule.required(),
        }),
        defineField({name: 'description', title: 'Description', type: 'text', rows: 3}),
        defineField({
          name: 'featured',
          title: 'Featured Post',
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
          ],
        }),
      ],
    }),

    // ---------- POST (latest posts) ----------
    defineField({
      name: 'post',
      title: 'Latest Posts',
      type: 'object',
      group: 'post',
      fields: [
        defineField({name: 'title', title: 'Title', type: 'string'}),
        defineField({
          name: 'filterButtons',
          title: 'Filter Buttons (in order: All, Apps, Products, Tutorial)',
          type: 'array',
          validation: (Rule) => Rule.length(4),
          of: [{type: 'string'}],
        }),
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
                  initialValue: './blogPost.php',
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
      return {title: 'Blog Page'}
    },
  },
})