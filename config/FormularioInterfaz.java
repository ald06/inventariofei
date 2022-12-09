import javax.swing.*;
import java.awt.event.*;

public class FormularioInterfaz extends Jframe implements ActionListener{

    private JTexfield textfield1;
    private JLabel label1;
    private JButton boton1;

      //diseño de componentes
    public FormularioInterfaz(){
        setLayout(null);
        label1 = new JLabel("usuario:");
        label1.setBounds(10,10,100,30);
        add(label1);

        textfield1 = new JTexfield();
        textfield1.setBounds(120,17.150,20);
        add(textfield1);

        boton1 = new JButton("aceptar");
        boton1.setBounds(10,80,100,30);
        boton1.addActionListener();
        add(boton1);
    }

     //funcionalidad
    public void actionPerfomed(actionEvent e){
        if(e.getSource() == boton1){
          String texto = textfield1.getText();
          setTitle(texto);
        }
        
    } 

    public static void main(String args[]){
        FormularioInterfaz formularioInterfaz = new FormularioInterfaz();
        formularioInterfaz.setBounds(0,0,300,150);
        formularioInterfaz.setVisible(true);
        formularioInterfaz.setResizable(false);
        formularioInterfaz.setLocationRelativeTo(null);

    }
}