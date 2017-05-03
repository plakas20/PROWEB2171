const {app,BrowserWindow} = require('electron')
const electron=require
//Ruta donde se encuentra nuestro proyecto
const path = require('path')
//Ruta pero en formato URL
const url  = require('url')
//constantes para impresion en PDF
const fs= require('fs')//sistemas de archivos
const os=require('os')//sistemas operativo
//llamada o procedimiento interno
const ipc=electron.ipcMain
//interfaz de comandos o terminal
const shell=electron.shell

//evento para imprimir un PDF
ipc.on('print-to-pdf', function(event){
const pdfPath=path.join(os.tmpdir(), 'print.pdf')
const win=BrowserWindow.fromWebContenst(event.sender)
win.webContents.printToPDF({},function(error,data){
	if(error) throw error
		fs.writeFile(pdfPath,data,function(error){
			if (error) {
				throw error
			}
		shell.openExternal('file://'+pdfPath)

		})
})
})
let PantallaPrincipal;
function muestraPantallaPrincipal(){
	PantallaPrincipal = new BrowserWindow({
		width:1024,
		height:768
	})
	PantallaPrincipal.on('closed',function(){
		PantallaPrincipal = null
	})
	PantallaPrincipal.loadURL(url.format({
		pathname: path.join(__dirname,'index.html'),
		protocol: 'file',
		slashes: true
	}))
	//Abre la pantalla de Inspección, donde se encuentra
	//la consola de Chrome dentro de electron.
	PantallaPrincipal.openDevTools();
	PantallaPrincipal.show()
}

//La aplicación ejecuta este evento cuando
//el archivo main.js se carga en memoria.
app.on('ready',muestraPantallaPrincipal)