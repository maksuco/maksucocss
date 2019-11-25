module.exports = {
  content: ['*.html', '*.blade', '*.blade.php', '*.php', '*/*.php', '*.js', '*/*.js','frontend-min.js'],
  css: ['maksucocss.css'],
  whitelist: ['body','fa','fab','fas','fal','far','fa-instagram'],
  //whitelistPatterns: [/fa-/]
}
//purgecss --config ./purgecss.config.js --out css