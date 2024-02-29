const common = require( './webpack.common.js' );
const { merge } = require( 'webpack-merge' );
const CssMinimizerPlugin = require( 'css-minimizer-webpack-plugin' );

module.exports = merge( common, {
	devtool: 'source-map',
	mode: 'production',
	optimization: {
		// minimize: false,
		// minimizer: [
		// 	new CssMinimizerPlugin(),
		// ],
	},
} );
