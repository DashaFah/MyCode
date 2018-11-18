class LZW
    
    attr_accessor :dictionary_basic
    
    def Coding (message)
        #message = gets.chomp.to_s
        dictionary = message.each_char.to_a.uniq
        @dictionary_basic = dictionary
        x = message[0]
        a = message[1..-1].each_char.inject([]) do |result,y|
            check = x+y
            if dictionary.include? (check)
                x=check
                else
                result << dictionary.index(x)
                dictionary << check
                x=y
            end
            result
        end
        a<<dictionary.index(x)
        puts a.join
        a
    end
    
    def Decoding (code)
        #chars = gets.chomp.to_s
        #dictionary = chars.each_char.to_a
        dictionary = dictionary_basic
        x = code[0]
        b = code[1..-1].inject([]) do |result,y|
            check=x+y
            if !dictionary.include? (check)
                
                if dictionary.size-1 < y
                    result << dictionary[x][0]+dictionary[x][0]
                    dictionary<<dictionary[x]+dictionary[x][0]
                    else
                    result << dictionary[x]
                    dictionary<<dictionary[x]+dictionary[y][0]
                end
                
                x=y
                else
                x=check
            end
            result
        end
        b<<dictionary[x]
        puts b.join
        b
    end
    
end

#data = "abacabadabacaba".to_s
#data = "aaaa".to_s

f = File.open("/Users/papers/Desktop/Ruby/LZWfile1.rb", "r")
data1 = f.read.to_s.chomp
name1 = File.basename("/Users/papers/Desktop/Ruby/LZWfile1.rb")
data = name1 + ">" + data1 + ">"
f.close
f = File.open("/Users/papers/Desktop/Ruby/LZWfile2.rb", "r")
data2 = f.read.to_s.chomp
name2 = File.basename("/Users/papers/Desktop/Ruby/LZWfile2.rb")
data = data + name2 + ">" + data2 + ">"
f.close
puts data
Message_to_decode = LZW.new
result = Message_to_decode.Coding (data)
original_message = Message_to_decode.Decoding (result)
original_message = original_message.to_s
string = ""
original_message.each_char.to_a.each_index do |i|
    puts original_message.class
    string = string + original_message[i]
    if original_message[i] == ">"
        string.chomp(">")
        print string
        string = ""
    end
end
