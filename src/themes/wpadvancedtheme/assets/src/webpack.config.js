const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
// const OptimizeCssAssetsPlugin = require( 'optimize-css-assets-webpack-plugin' );
// const cssnano = require( 'cssnano' ); // https://cssnano.co/
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
// const UglifyJsPlugin = require( 'uglifyjs-webpack-plugin' );
// const CopyPlugin = require('copy-webpack-plugin'); // https://webpack.js.org/plugins/copy-webpack-plugin/
// const DependencyExtractionWebpackPlugin = require( '@wordpress/dependency-extraction-webpack-plugin' );

// JS Directory path.
const JS_DIR = path.resolve( __dirname, 'src/js' );
const IMG_DIR = path.resolve( __dirname, 'src/img' );
// const LIB_DIR = path.resolve( __dirname, 'src/library' );
const BUILD_DIR = path.resolve( __dirname, 'build' );

const entry = {
	main:   JS_DIR + '/main.js',
	single: JS_DIR + '/single.js',
	// editor: JS_DIR + '/editor.js',
	// blocks: JS_DIR + '/blocks.js',
	// author: JS_DIR + '/author.js',
	// search: JS_DIR + '/search.js',
};

const output = {
	path: BUILD_DIR,
	filename: 'js/[name].js',
};

const rules = [
    {
        test: /\.js$/,
        include: [JS_DIR],
        exclude: /node_modules/,
        use: 'babel-loader'
    },
    {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader'
        ]
    },
    {
        test: /\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF|svg|ico)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
                name: '[path][name].[ext]',
                publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../',
              },
          },
        ],
    }
];

const plugins = () => [
    new CleanWebpackPlugin({
        cleanStaleWebpackAssets: 
    }),
];

module.exports = ( env, argv ) => ({

    entry: entry,
	output: output,
    devtool: 'source-map',
    rules: {
        'rules': rules
    },
    plugins: plugins( argv )

});