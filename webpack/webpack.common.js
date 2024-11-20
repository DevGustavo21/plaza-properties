const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const static_path = "../plaza-theme/assets/";

module.exports = {
  target: "web",
  entry: [`${static_path}/js/index.js`, `${static_path}/sass/index.scss`],
  output: {
    path: path.resolve(__dirname, "../dist/"),
    publicPath: "/dist/",
    filename: "js/[name].js",
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "css/[name].css",
    }),
  ],
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: "babel-loader",
      },
      {
        test: /\.ts$/,
        use: "ts-loader",
      },
      {
        test: /\.html$/i,
        loader: "html-loader",
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          "postcss-loader",
          {
            loader: "sass-loader",
            options: {
              sassOptions: {
                outputStyle: "expanded",
              },
            },
          },
        ],
      },
    ],
  },
  resolve: {
    modules: ["node_modules"],
    extensions: [".js", ".jsx", ".ts", ".css", ".scss"],
  },
};
