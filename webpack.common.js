const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const autoprefixer = require('autoprefixer');

module.exports = {
	entry: {
		main: './assets/js/index.js',
	},
	plugins: [
		new MiniCssExtractPlugin( {
			filename: 'main.css',
		} ),
	],
	module: {
		rules: [
			{
				test: /\.html$/i,
				loader: 'html-loader',
				exclude: /(node_modules|bower_components)/,
			},
			{
				test: /\.s[ac]ss$/i,
				use: [ 
					MiniCssExtractPlugin.loader, 
					'css-loader',
					"postcss-loader",
					{
						loader: 'sass-loader',
						options: {
							sassOptions: {
								outputStyle: "expanded",
							},
						},
					},
				],
				exclude: /(node_modules|bower_components)/,
			},
			{
				test: /\.(png|jpg|jpeg|gif|svg?)?$/,
				type: 'asset',
			},
		],
	},
};
