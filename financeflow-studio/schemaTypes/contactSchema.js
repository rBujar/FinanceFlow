import {defineField, defineType} from 'sanity'

export const contactSchema = defineType({
  name: 'contactPage',
  title: 'Contact Page',
  type: 'document',
  groups: [
    {name: 'contact', title: 'Contact'},
    {name: 'faq', title: 'FAQ'},
  ],
  fields: [
    // ---------- CONTACT ----------
    defineField({
      name: 'contact',
      title: 'Contact',
      type: 'object',
      group: 'contact',
      fields: [
        defineField({
          name: 'heading',
          title: 'Heading',
          type: 'string',
          validation: (Rule) => Rule.required(),
        }),
        defineField({
          name: 'formFields',
          title: 'Form Fields (in order: name, email, company, subject, message)',
          type: 'array',
          validation: (Rule) => Rule.length(5),
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'label', title: 'Label', type: 'string'}),
                defineField({name: 'placeholder', title: 'Placeholder', type: 'string'}),
              ],
              preview: {select: {title: 'label', subtitle: 'placeholder'}},
            },
          ],
        }),
        defineField({name: 'buttonText', title: 'Send Button Text', type: 'string'}),
        defineField({name: 'infoTitle', title: 'Info Title', type: 'string'}),
        defineField({name: 'infoDescription', title: 'Info Description', type: 'text', rows: 3}),
        defineField({
          name: 'emails',
          title: 'Emails',
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
                defineField({name: 'text', title: 'Email', type: 'string'}),
              ],
              preview: {select: {title: 'text', media: 'icon'}},
            },
          ],
        }),
      ],
    }),

    // ---------- FAQ ----------
    defineField({
      name: 'faq',
      title: 'FAQ',
      type: 'object',
      group: 'faq',
      fields: [
        defineField({name: 'heading', title: 'Heading', type: 'string'}),
        defineField({
          name: 'items',
          title: 'Questions',
          type: 'array',
          validation: (Rule) => Rule.length(5),
          of: [
            {
              type: 'object',
              fields: [
                defineField({name: 'question', title: 'Question', type: 'string'}),
                defineField({name: 'answer', title: 'Answer', type: 'text', rows: 3}),
              ],
              preview: {select: {title: 'question'}},
            },
          ],
        }),
      ],
    }),
  ],

  preview: {
    prepare() {
      return {title: 'Contact Page'}
    },
  },
})