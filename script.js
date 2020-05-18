const listPokemon = document.querySelectorAll('.pokemon-js')
const buttonFire = document.querySelector('.button-fire-js')
const buttonGrass = document.querySelector('.button-grass-js')
const buttonWater = document.querySelector('.button-water-js')
const buttonNormal = document.querySelector('.button-normal-js')
const buttonBug = document.querySelector('.button-bug-js')
const buttonFlying = document.querySelector('.button-flying-js')
const buttonPoison = document.querySelector('.button-poison-js')
const buttonElectric = document.querySelector('.button-electric-js')
const buttonGround = document.querySelector('.button-ground-js')
const allPokemonOnScreen = document.querySelector('.all-js')
const noScroll = document.querySelector('body')


//pokemons fire 

buttonFire.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('fire-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {   
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon grass

buttonGrass.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('grass-js')) {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon water

buttonWater.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('water-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon normal

buttonNormal.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('normal-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon bug

buttonBug.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('bug-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon flying

buttonFlying.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('flying-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon poison

buttonPoison.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('poison-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon electric

buttonElectric.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('electric-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//pokemon ground 

buttonGround.addEventListener('click', () => 
{
    for (const _element of listPokemon) 
    {
        if (_element.classList.contains('ground-js')) 
        {
            _element.classList.add('is-activ')
        }
        else
        {
            _element.classList.remove('is-activ')
            _element.classList.add('is-unactiv')
        }
    }
    noScroll.style.overflow = "hidden"
    allPokemonOnScreen.classList.remove('starter-hidden')
})

//all pokemon on screen 

allPokemonOnScreen.addEventListener('click', () =>
{
    for (const _element of listPokemon) 
    {
        _element.classList.add('is-activ')
    }
    noScroll.style.overflow = "auto"
    allPokemonOnScreen.classList.add('starter-hidden')
})

console.log(pokemonWeight)
console.log(pokemonHeight)
console.log(pokemonHp)
console.log(pokemonTypeOne)
console.log(pokemonTypeTwo)
console.log(pokemonImage)
