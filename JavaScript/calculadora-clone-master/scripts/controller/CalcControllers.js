class CalcController{

    constructor(){

        //criando atributos
        this._operation = []
        this._locale = 'pt-BR'
        this._displayCalcEl = document.querySelector("#display")
        this._dateEl = document.querySelector("#data")
        this._timeEl = document.querySelector("#hora")
        this._currentDate
        this.initialize()
        this.initButtonsEvents()

    }

    initialize(){
        
        this.setDisplayDateTime()

       //intervalo de segundos na calculadora
       setInterval(()=> {
        
        this.setDisplayDateTime()
       
        },1000) 
    }

    addEventListenerAll(element, events, fn){

            events.split(' ').forEach(event => {

                element.addEventListener(event, fn, false);
            });
    }

 //limpar todas entradas   
    clearAll(){
        this._operation = []
    }

//limpar ultima entrada
    clearEntry(){
        this._operation.pop()
    }

//mensagem de erro no display
    setError(){
        this.displayCalc = "Error"
    }

//adicionando operação
    addOperation(value){
        this._operation.push(value)
        console.log(this._operation)
    }

//adicionando os digitos e operações
    execBtn(value){
        
        switch(value){

            case 'ac':
                this.clearAll();
                break
            case 'ce':
                this.clearEntry();
                break
            case 'soma':

                break
            case 'soma':

                break
            case 'subtracao':

                break
            case 'divisao':

                break
            case 'multiplicacao':

                break
            case 'porcento':

                break
            case 'igual':

                break
            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':    
            case '9':
                this.addOperation(parseInt(value))
                break
            default:
                this.setError();
                break
        }

    }

    //selecionar os botões da calculadora
    initButtonsEvents(){
        let buttons = document.querySelectorAll("#buttons > g, #parts > g")
        //percorrendo os botões
        buttons.forEach((btn, index)=>{

            this.addEventListenerAll(btn, "click drag", e => {
            
                let textBtn = btn.className.baseVal.replace("btn-", "")

                this.execBtn(textBtn)
    
            });

            this.addEventListenerAll(btn, "mouseover mouseup mousedown", e =>{

                btn.style.cursor = "pointer"

            });
        });
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