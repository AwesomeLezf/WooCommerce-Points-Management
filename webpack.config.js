const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = (env) => {
  config = {
    entry: {
      main: "./admin/assets/scripts/main.js",
    },
    output: {
      path: path.resolve(__dirname, "admin/dist"),
      filename: "[name].bundle.js",
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "[name].bundle.css",
      }),
    ],
    module: {
      rules: [
        {
          test: /\.(sa|sc|c)ss$/,
          use: [
            MiniCssExtractPlugin.loader,
            {
              loader: "css-loader",
              options: {
                url: false,
                importLoaders: 1,
              },
            },
            {
              loader: "postcss-loader",
              options: {
                sourceMap: false,
              },
              options: {
                postcssOptions: {
                  plugins: [require("postcss-easy-import")({ prefix: "_" }), require("postcss-import"), require("tailwindcss")(`${__dirname}/tailwind.config.js`), require("autoprefixer")],
                },
              },
            },
            {
              loader: "sass-loader",
            },
          ],
        },
      ],
    },
  };

  return config;
};
