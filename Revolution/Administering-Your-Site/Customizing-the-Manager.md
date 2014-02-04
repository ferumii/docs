# Customizing the Manager

## What is Form Customization?

Form Customization is a new feature that allows users to create Rules, which govern how manager pages render their forms in the MODX Revolution Manager. It is similar to ManagerManager in MODX Evolution.

<iframe width="420" height="315" src="//www.youtube.com/embed/iJB_IXg7NNc?rel=0" frameborder="0" allowfullscreen></iframe>

## How Does it Work?

Currently, Form Customization has 3 layers:

    Profile -> Sets -> Rules

A Profile is a collection of Sets, and Sets are collections of Rules. Profiles can be restricted to specific User Groups.

A Set is a collection of Rules, and is tied to a certain view. Normally, you would have a Set for the Resource/Create page, and a Set for the Resource/Update page. Sets can also be tied to specific Templates (meaning they load only when the Resource is using that Template). They can also have a 'Constraint' set, which limits the Set's execution to the restriction made in the Constraint.

A Rule is all the variations applied in a Set. Rules are hidden from view in MODX Revolution, but are instead shown as fields on the Set Editing page.

More information about each of the parts of Form Customization can be found in each part's respective page:

- [Customizing the Manager via Plugins](./Customizing-the-Manager-via-Plugins.md)
- [Form Customization Profiles](./Form-Customization-Profiles.md)
- [Form Customization Sets](./Form-Customization-Sets)
    - [Customizing Tabs via Form Customization](./Form-Customization-Sets/Customizing-Tabs-via-Form-Customization.md)
- [Manager Templates and Themes](./Manager-Templates-and-Themes.md)

### What Forms can I Customize?

The Resource Create and Update pages can be customized at this time in Form Customization.