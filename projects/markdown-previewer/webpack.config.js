module.exports = {
  entry: './src/index.js',

  output: {
    path: '/mnt/c/MAMP/htdocs/richieblack.me/projects/markdown-previewer/build',
    filename: 'bundle.js'
  },

  module: {

    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: 'babel-loader'
      },

      {
        test:/\.(s*)css$/,
        use:['style-loader','css-loader', 'sass-loader']
      },

      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        use: [
          'url-loader?limit=10000', 'img-loader']
      }
    ]
  },
};
