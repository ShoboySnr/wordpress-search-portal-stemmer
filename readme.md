# Porter Stemmer Integration for WordPress Search and WooCommerce Queries

This project demonstrates how to implement the Porter Stemmer algorithm to process keywords for WordPress search, WooCommerce product queries, and Products Filter Professional for WooCommerce (WOOF) queries. The Porter Stemmer algorithm is a common algorithm for stemming English words, which reduces words to their base or root form.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Requirements

- WordPress 5.0 or higher
- WooCommerce 4.0 or higher
- Products Filter Professional for WooCommerce (WOOF) plugin

## Installation

1. **Download the Repository**

   Clone this repository to your local WordPress installation:

   ```sh
   git clone git@github.com:ShoboySnr/wordpress-search-porter-stemmer.git
   ```
2. **Upload to WordPress**

   Upload the cloned repository to your WordPress /wp-content/plugins/ directory.

3. **Activate the Plugin**

    Go to your WordPress admin dashboard, navigate to the Plugins menu, and activate the "Porter Stemmer Integration" plugin.

## Configuration
No additional configuration is needed. Once the plugin is activated, it will automatically apply Porter Stemmer to the keywords in WordPress search, WooCommerce product queries, and WOOF queries.

## Usage
After activating the plugin, the search functionality in your WordPress site will start using the Porter Stemmer algorithm. This includes:

- WordPress Default Search
- WooCommerce Product Queries
- Products Filter Professional for WooCommerce (WOOF) Queries

## Contributing
We welcome contributions to enhance the functionality of this plugin. Please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.


## Credit
The implementation of the Porter2 Stemmer algorithm is based on the original algorithm by [Snowball Tartarus](http://snowball.tartarus.org/). For more information on the Porter Stemmer, visit [Porter2 Stemming Algorithm](http://snowball.tartarus.org/algorithms/english/stemmer.html).

