class CalcController{

    constructor(){

        //criando atributos
        this._locale = 'pt-BR'
        this._displayCalcEl = document.querySelector("#display")
        this._dateEl = document.querySelector("#data")
        this._timeEl = document.querySelector("#hora")
        this._currentDate
        this.initialize()

    }

    initialize(){
        
        this.setDisplayDateTime()

       //intervalo de segundos na calculadora
       setInterval(()=> {
        
        this.setDisplayDateTime()
       
        },1000) 
    }

      //selecionar os botões da calculadora
      initButtonsEvents(){
        let buttons = document.querySelectorAll("#buttons > g, #parts > g")
    }

    setDisplayDateTime(){
        this.displayDate = this.currentDate.toLocaleDateString(this._locale)
        this.displayTime = this.currentDate.toLocaleTimeString(this._locale)
    }

    get displayTime(){
        return this._timeEl.innerHTML
    }
    
    set displayTime(v){
        return this._timeEl.innerHTML = v
    }

    get displayDate(){
        return this._dateEl.innerHTML
    }

    set displayDate(v){
        this._dateEl.innerHTML = v
    }

    get displayCalc(){
        return this._displayCalcEl.innerHTML
    }

    set displayCalc(v){
        this._displayCalcEl.innerHTML = v
    }

    get currentDate(){
        return new Date()
    }

    set currentDate(d){
        this._currentDate = d
    }
}