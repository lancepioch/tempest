# Tempest

Project Management

## TODO Features

* [ ] CRUD Issues (archiveable)
  * [ ] Fields: Title, Text, ?Parent, \[Customizable Attributes]
  * [ ] Markdown
  * [ ] Children Issues
  * [ ] Issue Types
  * [ ] Custom Issue Types
* [ ] CRUD Sprints
  * [ ] Fields: Name, Due, Frequency 
* [ ] CRUD Boards (Kanban)
  * [ ] Order/Organize Issues
* [ ] CRUD Comments (for each issue)
  * [ ] Markdown
* [ ] User Roles (either per project or per team)
  * [ ] Administrators manage projects
  * [ ] Developers work on issues in projects
  * [ ] Users create and read issues in projects
* [ ] Jira Integration
  * [ ] Doesn't break Jira

## Goals

### Play Nice with Others

This project should be able to be run side by side with Jira. 

### Simplicity

It's worth noting that the complexity and vastness of features in JIRA can be overwhelming for some users,
especially for smaller teams or for those who prefer a simpler, more straightforward tool.

### Easy and Advanced Search

Do we need something like JQL right off the bat?
Can we get simple search done right?

### Simple and Advanced Reporting

Customizable reports and dashboards?

We should provide easy visibility into project status and team performance.

### Access Control and Security

Simple and secure, ensure that sensitive information is only accessible to the right people.

With the above roles per project and per team, you can easily create user accounts for any type of real position.
For example, stakeholders could be given read only access to what they need to focus on.
Customers could be given read/write only access to their own issues.
Creators/Contributors can be given read/write access to all issues in certain projects.

### API

Integrations will naturally help this grow.

### Kanban and Agile Support

Two biggest types.

### Custom Fields, Workflows, and Issue Types

Can we make these easy and out of the box?

### Integrations

Which of these is most necessary?
Should we focus on Git providers first/only? (GitHub, GitLab, Bitbucket)
