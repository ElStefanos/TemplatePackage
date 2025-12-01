# PackageName Template

This is a starter template for creating a new package for the Advanced Web Tools (AWT) framework. It provides a basic file structure, a pre-configured welcome page, and examples of how to set up controllers, routes, and views.

## Features

This template includes the following features to get you started:

- **MVC Structure:** A clean and organized Model-View-Controller architecture.
    - `PackageNameController.php`: A sample controller.
    - `index.awt.php` & `main.awt.php`: Blade-style view templates.
- **Routing:** A pre-configured router in `PackageNameRouter.php` to handle basic web requests.
- **Welcome Page:** A modern, responsive, dark-mode-ready welcome page styled with `main.css`.
- **Installation Script:** A placeholder `install.php` for any post-installation logic your package might need.
- **Manifest File:** A `manifest.json` file to define your package's metadata, including its name, version, and AWT compatibility.
- **Framework Integration:** The template demonstrates how to use the AWT `RuntimeLinkerAPI` and `RuntimeControllerAPI`.
- **Readme skeleton:** an example of how your readme should be constructed.
## File Structure

Here is a brief overview of the important files and directories included in this template:

-   `main.php`: The main entry point for the package. It links the router and controller API.
-   `manifest.json`: Contains metadata about the package.
-   `install.php`: Handles post-installation logic, such as database migrations.
-   `/controllers`:
    -   `PackageNameController.php`: The main controller for the package.
    -   `PackageNameControllerAPI.php`: The API for the controller, responsible for its setup and configuration.
-   `/routes`:
    -   `PackageNameRouter.php`: Defines the routes for the package.
-   `/views`:
    -   `index.awt.php`: The main view file for the welcome page.
    -   `main.awt.php`: The master layout template.
    -   `/assets`:
        -   `/css/main.css`: The stylesheet for the welcome page.
        -   `/js/my_js.js`: A placeholder for your JavaScript code.

## How to Use

1.  **Rename "PackageName"**: Search and replace all instances of "PackageName" with the name of your package.
2.  **Update `manifest.json`**: Fill in the details for your package, such as the `name`, `description`, and `author`.
3.  **Customize the Controller**: Modify `PackageNameController.php` to add your own logic.
4.  **Define Routes**: Add your application's routes to `PackageNameRouter.php`.
5.  **Create Views**: Edit the `.awt.php` files in the `/views` directory to create your user interface.
6.  **Add Assets**: Place your CSS, JavaScript, and other assets in the `/views/assets` directory.
7.  **Implement Installation Logic**: If your package needs to perform actions upon installation, add the necessary code to `install.php`.

### JetBrains integration
If you are using a Jetbrains **AWT Package** plugin, most of the renaming and manifest editing can be skipped.
