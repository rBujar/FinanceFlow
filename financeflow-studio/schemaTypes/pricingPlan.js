
import {defineType, defineField} from 'sanity'

export const pricingPlan = defineType({
  name: 'pricingPlan',
  title: 'Pricing Plan',
  type: 'document',

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

    defineField({
      name: 'order',
      title: 'Display Order',
      type: 'number',
    }),
  ],
})