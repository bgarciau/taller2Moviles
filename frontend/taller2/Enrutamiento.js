import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import Registro from './Registro';

const Stack = createStackNavigator();
const Enrutamiento = () => {
    return (
        <NavigationContainer>
            <Stack.Navigator initialRouteName="Registro">
                <Stack.Screen name="Registro" component={Registro} options={{ headerShown: false }}  />
            </Stack.Navigator>
        </NavigationContainer>
    )
};
export default Enrutamiento;