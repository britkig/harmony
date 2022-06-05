# Harmony Framework
**A common-component PHP framework**

## Framework Fundamentals
The Framework is formed of three sub-systems:
- **Common** for components that work in any environment
- **CLI** for components that can only be used in CLI (command-line interface) scripts
- **Web** for components that only practical within web server applications

To main consistency, functions:
- Always return a `bool` to indicate successful execution (handy for use directly within `if`-statements)
- If the function needs to output extra information, the first parameter is reserved as a pointer parameter for delivering that output, with the value of the passed variable being unchanged if the function fails to complete successfully.
