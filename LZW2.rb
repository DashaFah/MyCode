class LZW
    
    def Coding(d)
        string=d
        dictionary=string.each_char.to_a.uniq
        size=string.size
        result_code=Array.new()
        x=string[0]
        (1..size).each do |i|
            y=string[i]
            if y==nil
                result_code<<dictionary.index(x)
                else
                if dictionary.include?(x+y)
                    x=x+y
                    else
                    result_code<<dictionary.index(x)
                    dictionary<<x+y
                    x=y
                end
            end
        end
        print result_code
        puts
        return result_code
    end
    
    def Decoding(result_code)
        dictionary_decoding = gets.chomp.each_char.to_a
        result_string=Array.new()
        size_code=result_code.size
        x1=dictionary_decoding[result_code[0]]
        (1..size_code).each do |i|
            the_end=result_code[i]
            if the_end==nil
                result_string<<x1
                else
                y1=dictionary_decoding[result_code[i]]
                if dictionary_decoding.include?(x1+y1)
                    x1=x1+y1
                    else
                    result_string<<x1
                    dictionary_decoding<<x1+y1[0]
                    x1=y1
                end
            end
        end
        print result_string.join
        puts
    end
end

#f = File.open("lzw1.rb", "r")
#data = "abacabadabacaba".to_s
data = gets.chomp
#f.close
Message = LZW.new
result = Message.Coding(data)
Message.Decoding (result)
#abacabadabacaba