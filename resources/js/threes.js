var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

var renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.outputEncoding = THREE.sRGBEncoding;
// renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize( window.innerWidth, window.innerHeight );
var controls = new THREE.OrbitControls(camera, renderer.domElement);
document.getElementById('threejs').appendChild( renderer.domElement );
var id = null;


const directionalLight = new THREE.DirectionalLight(0xffffff, 2);
directionalLight.position.set(0, 1, 0);
directionalLight.castShadow = true;
scene.add( directionalLight );
const light = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(0, 60, 100);
light.castShadow = true;
scene.add(light);
const light2 = new THREE.DirectionalLight(0xe6f7ff, 1);
light2.position.set(100, 20, 0);
light2.castShadow = true;
scene.add(light2);
const light3 = new THREE.DirectionalLight(0xfff2e6, 1);
light3.position.set(0, 20, -100);
light3.castShadow = true;
scene.add(light3);
const light4 = new THREE.DirectionalLight(0xc4c400, 1);
light4.position.set(-100, 60, 100);
light4.castShadow = true;
scene.add(light4);

const loader = new THREE.GLTFLoader();

var payload = window.location.href.split('p=');
//var payload = window.location.href;
//payload = payload.slice(payload.indexOf('p=') + 2)


loader.load( '/assets/data/' + payload[1] + '.glb', function ( gltf )
{
    sword = gltf.scene;  // sword 3D object is loaded
    sword.position.set(0,0,0);
    scene.add(sword);

          // compute the box that contains all the stuff
      // from root and below
      const box = new THREE.Box3().setFromObject(sword);

      const boxSize = box.getSize(new THREE.Vector3()).length();
      const boxCenter = box.getCenter(new THREE.Vector3());

      // set the camera to frame the box
      frameArea(boxSize, boxSize, boxCenter, camera);

      // update the Trackball controls to handle the new size
      controls.maxDistance = boxSize;
      controls.target.copy(boxCenter);
      controls.update();
} );
camera.position.z = 5;

function render() {

    renderer.render( scene, camera );

}

function animate() {
    if (!window.location.href.includes('/viewer')) {
        cancelAnimationFrame( id );
        elem = document.getElementById("threejs");
        elem.parentNode.removeChild(elem);
    } else {

        id = requestAnimationFrame( animate );

        controls.update()
        renderer.render( scene, camera );
    }
}

function frameArea(sizeToFitOnScreen, boxSize, boxCenter, camera) {
    const halfSizeToFitOnScreen = sizeToFitOnScreen * 0.5;
    const halfFovY = THREE.Math.degToRad(camera.fov * .5);
    const distance = halfSizeToFitOnScreen / Math.tan(halfFovY);

    const direction = (new THREE.Vector3())
    .subVectors(camera.position, boxCenter)
    .multiply(new THREE.Vector3(1, 0, 1))
    .normalize();

// move the camera to a position distance units way from the center
// in whatever direction the camera was from the center already
camera.position.copy(direction.multiplyScalar(distance).add(boxCenter));

// pick some near and far values for the frustum that
// will contain the box.
camera.near = boxSize / 100;
camera.far = boxSize * 100;

camera.updateProjectionMatrix();

// point the camera to look at the center of the box
camera.lookAt(boxCenter.x, boxCenter.y, boxCenter.z + 20);
}

animate();
