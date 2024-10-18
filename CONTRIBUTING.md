# Contributing to Yabasi Framework

We're thrilled that you're interested in contributing to Yabasi Framework! This document provides guidelines for contributing to the project. Following these guidelines helps to communicate that you respect the time of the developers managing and developing this open source project.

## Table of Contents

1. [Code of Conduct](#code-of-conduct)
2. [Getting Started](#getting-started)
3. [How Can I Contribute?](#how-can-i-contribute)
4. [Style Guidelines](#style-guidelines)
5. [Commit Messages](#commit-messages)
6. [Pull Requests](#pull-requests)
7. [Development Workflow](#development-workflow)
8. [Reporting Bugs](#reporting-bugs)
9. [Suggesting Enhancements](#suggesting-enhancements)
10. [Documentation](#documentation)
11. [Community](#community)

## Code of Conduct

This project and everyone participating in it is governed by the [Yabasi Code of Conduct](CODE_OF_CONDUCT.md). By participating, you are expected to uphold this code. Please report unacceptable behavior to [abbas@yabasi.com](mailto:abbas@yabasi.com).

## Getting Started

1. Fork the repository on GitHub.
2. Clone your fork locally: `git clone https://github.com/yabasi/yabasi.git`
3. Create a branch for your edits: `git checkout -b new-feature`
4. Install dependencies: `composer install`
5. Make your changes and ensure tests pass: `vendor/bin/phpunit`

## How Can I Contribute?

### Reporting Bugs

- Ensure the bug was not already reported by searching on GitHub under [Issues](https://github.com/yabasi/framework/issues).
- If you're unable to find an open issue addressing the problem, [open a new one](https://github.com/yabasi/framework/issues/new). Be sure to include a title and clear description, as much relevant information as possible, and a code sample or an executable test case demonstrating the expected behavior that is not occurring.

### Suggesting Enhancements

- Open a new issue with a clear title and detailed description of the suggested enhancement.
- Provide code samples if applicable.
- Explain why this enhancement would be useful to most Yabasi users.

### Pull Requests

1. Ensure any install or build dependencies are removed before the end of the layer when doing a build.
2. Update the README.md with details of changes to the interface, this includes new environment variables, exposed ports, useful file locations and container parameters.
3. Increase the version numbers in any examples files and the README.md to the new version that this Pull Request would represent.
4. You may merge the Pull Request in once you have the sign-off of two other developers, or if you do not have permission to do that, you may request the second reviewer to merge it for you.

## Style Guidelines

- Follow PSR-12 coding standards.
- Use meaningful variable and function names.
- Keep functions small and focused on a single task.
- Comment your code where necessary, but prefer self-documenting code.
- Use type hints and return type declarations where possible.

## Commit Messages

- Use the present tense ("Add feature" not "Added feature")
- Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
- Limit the first line to 72 characters or less
- Reference issues and pull requests liberally after the first line

## Development Workflow

1. Create a new branch for each feature or bugfix.
2. Write tests for your changes.
3. Make your changes.
4. Run the entire test suite to ensure nothing else was accidentally broken.
5. Commit your changes (see Commit Messages above).
6. Push to your fork and submit a pull request.

## Documentation

- Update documentation when changing code functionality.
- Use clear and concise language.
- Provide examples where appropriate.

## Community

- Follow us on [Twitter](https://twitter.com/abbaskandemir) for updates.
- Connect with us on [LinkedIn](https://www.linkedin.com/in/abbaskandemir) for professional networking and updates.
- Subscribe to our [mailing list](https://yabasi.com) for important announcements.

Thank you for contributing to Yabasi Framework!