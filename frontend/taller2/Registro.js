import { StyleSheet, Text, View, TextInput, Button} from 'react-native';
import axios from 'axios';
import React, { useState } from 'react';
import { useNavigation } from '@react-navigation/native';



export default function Registro() {
  const [name, setName] = useState('');
  const [last_name, setLastname] = useState('');
  const [age, setAge] = useState();
  const [num, setNum] = useState();
  const navigation = useNavigation();

  const handleRegistrar = () => {
    axios.post('http://192.168.20.20:8000/api/assistants', {
        name: name,
        last_name: last_name,
        age: age,
        num_companions: num,
    }).then((response) => {
      // Alert.alert('Registro', 'correcto.');
      navigation.navigate('Registro');
      setName('');
      setLastname('');
      setAge();
      setNum();
  })
  .catch((error) => {
          // Alert.alert('Error', 'Error al iniciar sesión. Inténtalo de nuevo.');
          navigation.navigate('Registro');
          setName('');
          setLastname('');
          setAge();
          setNum();
  });
};
  return (
    <View style={styles.container}>
      <Text>Registro de asistentes</Text>
      <TextInput placeholder='Nombre' onChangeText={(text) => setName(text)} value={name} ></TextInput>
      <TextInput placeholder='Apellido' onChangeText={(text) => setLastname(text)} value={last_name}></TextInput>
      <TextInput placeholder='Edad' onChangeText={(text) => setAge(text)} value={age}></TextInput>
      <TextInput placeholder='Num acompañantes' onChangeText={(text) => setNum(text)} value={num}></TextInput>
      <Button title="Registrarr" onPress={handleRegistrar} color="#000000" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
