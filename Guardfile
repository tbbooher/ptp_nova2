# ~/.guardfile
 
# More info at https://github.com/guard/guard#readme
 
notification :off
 
puts "Using default guard file."
 
group :development do
 
  if File.exists?("./config.rb")
    # Compile on start.
    puts `compass compile --time --quiet`
    # https://github.com/guard/guard-compass
    guard :compass do
      watch(%r{(.*)\.s[ac]ss$})
    end
  end
 
  # Look for specified files in the current and child directories.
  # `find` requires Ruby 1.9 or greater.
  require 'find'
    if Find.find(Dir.pwd).detect{|dir|dir=~/.+\.(css|js|html?|php|inc|theme)$/}
     guard :livereload do
       watch(%r{.+\.(css|js|html?|php|inc|theme)$})
    end
  end
 
  # # Uncomment block above and remove this if using Ruby 1.9 or greater.
  # # https://github.com/guard/guard-livereload.
  # guard :livereload do
  #   watch(%r{.+\.(css|js|html?|php|inc|theme)$})
  # end
 
end