const { merge } = require("webpack-merge");
const commonConfig = require("./webpack.common");
const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = merge(commonConfig, {
  mode: 'development',
  devtool: 'inline-source-map',
  plugins: [
    new BrowserSyncPlugin({
      host: 'plaza-properties-net.local',
      port: 3000,
      proxy: 'http://plaza-properties-net.local',
      open: true
    })
  ]
});

