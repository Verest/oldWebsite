module.exports = {
  entry: './src/index.js',

  output: {
    path: '/mnt/c/Users/rb152/Desktop/website_projects/richieblack.me/projects/markdown-previewer',
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
        test:/\.scss$/,
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
