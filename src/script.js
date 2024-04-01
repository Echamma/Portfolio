function type_writer_effect(text)
{   
    const index = 0
    const element = document.getElementById("type_writer");
     
    while(index< text.length)
    {
        element.innerHTML += text.charAt(index);
        
    }

}