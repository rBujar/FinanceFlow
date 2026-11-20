import {defineType, defineField} from 'sanity'

export const pricingSchema = defineType({
  name: 'pricingPage',
  title: 'Pricing Page',
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
        defineField({
          name: 'description',
          title: 'Description',
          type: 'text',
          rows: 3,
        }),
      ],
    }),

    // ---------- CONTENT: INFO (icons row above the cards) ----------
    defineField({
      name: 'traits',
      title: 'Traits (icons row above the cards)',
      type: 'array',
      group: 'content',
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
            defineField({name: 'text', title: 'Text', type: 'string'}),
          ],
          preview: {select: {title: 'text', media: 'icon'}},
        },
      ],
    }),

    // ---------- CONTENT: CARDS ----------
    defineField({
      name: 'plans',
      title: 'Pricing Plans (drag to reorder)',
      type: 'array',
      group: 'content',
      of: [
        {
          type: 'object',
          fields: [
            defineField({
              name: 'planName',
              title: 'Plan Name',
              type: 'string',
              options: {
                list: [
                  {title: 'Basic', value: 'basic'},
                  {title: 'Pro', value: 'pro'},
                  {title: 'Expert', value: 'expert'},
                ],
              },
              validation: (Rule) => Rule.required(),
            }),
            defineField({
              name: 'price',
              title: 'Price',
              type: 'number',
              validation: (Rule) => Rule.required(),
            }),
            defineField({
              name: 'currency',
              title: 'Currency',
              type: 'string',
              initialValue: 'USD',
            }),
            defineField({
              name: 'currencySymbol',
              title: 'Currency Symbol',
              type: 'string',
              initialValue: '$',
            }),
            defineField({
              name: 'description',
              title: 'Description',
              type: 'text',
            }),
            defineField({
              name: 'featuresTitle',
              title: 'Features Heading',
              type: 'string',
              initialValue: 'Features',
            }),
            defineField({
              name: 'features',
              title: 'Features',
              type: 'array',
              of: [{type: 'string'}],
            }),
            defineField({
              name: 'buttonText',
              title: 'Button Text',
              type: 'string',
              initialValue: 'contact us',
            }),
            defineField({
              name: 'buttonLink',
              title: 'Button Link',
              type: 'string',
              initialValue: '../contact.php',
            }),
          ],
          preview: {select: {title: 'planName', subtitle: 'description'}},
        },
      ],
    }),
  ],

  preview: {
    prepare() {
      return {title: 'Pricing Page'}
    },
  },
})