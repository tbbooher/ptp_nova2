require 'uglifier'

File.open("../js.min.js", "w") do |file| 
    file.write Uglifier.compile(`cat *.js`, output: {beautify: false, comments: :none})
end