function Vaunted(options){
    let this_type = document.querySelectorAll('.command')

    if(options.type === 'command')
        console.log('command')
    else
        console.log('Something Else')

    this_type.forEach(type => {
        console.log(type);
    })
}

module.exports.vaunted = vaunted;