# Harmony Framework
**A common-component PHP framework**

## Framework Fundamentals
The Framework is formed of three sub-systems:
- **Common** for components that work in any environment
- **CLI** for components that can only be used in CLI scripts
- **Web** for components that only work within web server applications

To main consistency, functions:
- Always return a `bool` to indicate successful execution (handy for use directly within `if`-statements)
- If additional data needs to be returned, the first parameter is reserved for delivering that output.
